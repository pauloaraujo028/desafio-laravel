<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;

class ProfileManager extends Component
{
    use Actions;
    use WithFileUploads;

    protected array $rules = [
        'cep' => ['required', 'max:9'],
        'numero' => ['required'],
        'telefone' => ['required'],
    ];

    protected array $messages = [
        'cep.required' => 'O campo CEP é obrigatório',
        'cep.max' => 'O campo CEP deve ter 8 digitos',
        'numero.required' => 'O campo Número é obrigatório',
        'telefone.required' => 'O campo Telefone é obrigatório',
    ];

    public string $cep = "";
    public string $rua = "";
    public string $bairro = "";
    public string $cidade = "";
    public string $estado = "";
    public string $numero = "";
    public string $complemento = "";
    public int $user_id;
    public string $sobrenome = "";
    public string $telefone = "";
    public $profilePicture;
    public bool $disableFields = false;

    public function buscarCep()
    {
        $response = Http::get("https://viacep.com.br/ws/{$this->cep}/json/")->json();

        $this->cep = $response['cep'];
        $this->rua = $response['logradouro'];
        $this->bairro = $response['bairro'];
        $this->cidade = $response['localidade'];
        $this->estado = $response['uf'];
    }

    public function mount(): void
    {
        $user = auth()->user();

        if ($user) {
            $this->user_id = $user->id;

            if ($user->isProfileComplete()) {
                $this->sobrenome = $user->sobrenome;
                $this->telefone = $user->telefone;
            }
        }

        if ($user->address) {
            $this->cep = $user->address->cep;
            $this->rua = $user->address->rua;
            $this->bairro = $user->address->bairro;
            $this->cidade = $user->address->cidade;
            $this->estado = $user->address->estado;
            $this->numero = $user->address->numero;
            $this->complemento = $user->address->complemento;
        }

        $this->disableFields = ($user && ($user->user || $user->address));
    }

    public function save()
    {
        $this->validate();

        $user = User::findOrFail($this->user_id);

        $user->update([
            'sobrenome' => $this->sobrenome,
            'telefone' => $this->telefone,
        ]);

        if ($user->address) {
            $user->address->update([
                'cep' => $this->cep,
                'rua' => $this->rua,
                'bairro' => $this->bairro,
                'cidade' => $this->cidade,
                'estado' => $this->estado,
                'numero' => $this->numero,
                'complemento' => $this->complemento,
            ]);
        } else {
            $user->address()->create([
                'cep' => $this->cep,
                'rua' => $this->rua,
                'bairro' => $this->bairro,
                'cidade' => $this->cidade,
                'estado' => $this->estado,
                'numero' => $this->numero,
                'complemento' => $this->complemento,
            ]);
        }

        if ($this->profilePicture) {
            $imageName = time() . '.' . $this->profilePicture->getClientOriginalExtension();
            $this->profilePicture->storeAs('profile_images', $imageName, 'public');

            $user->profile_picture = 'profile_images/' . $imageName;
            $user->save();
        }

        $this->notification()->success('Cadastro Atualizado', 'Seus dados foram atualizados com sucesso!');

        $this->reset();

        return redirect()->route('home')->with('success', 'Perfil atualizado com sucesso!');
    }


    public function render()
    {
        $user = auth()->user();

        return view('livewire.profile-manager', compact('user'));
    }
}
