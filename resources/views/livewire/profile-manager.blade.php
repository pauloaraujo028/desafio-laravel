<div class="w-2/4">
    <x-card title="Informações Pessoais">
        <x-errors class="mb-4" />
        <x-notifications lang="" />
        <div class="flex flex-col w-full items-center justify-center gap-4 mb-4">
            @if ($profilePicture)
                <div class="border rounded-full w-[150px] h-[150px] overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{ $profilePicture->temporaryUrl() }}" alt="Perfil" />
                </div>
            @elseif ($user->profile_picture)
                <div class="border rounded-full w-[150px] h-[150px] overflow-hidden">
                    <img class="w-full h-full object-cover" src="{{ asset('storage/' . $user->profile_picture) }}"
                        alt="Perfil" />
                </div>
            @else
                <div class="border rounded-full w-[150px] h-[150px] bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-500 text-3xl">Sem Foto</span>
                </div>
            @endif
            <input class="text-sm" wire:model="profilePicture" type="file" name="profile_picture" accept="image/*">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-6 sm:gap-5">
                <div class="col-span-1 sm:col-span-3">
                    <x-input label="Nome" placeholder="Nome" type="text" id="name" name="name"
                        value="{{ auth()->user()->nome }}" wire:ignore disabled />
                </div>
                <div class="col-span-1 sm:col-span-3">
                    <x-input label="Sobrenome" placeholder="Sobrenome" type="text" id="sobrenome" name="sobrenome"
                        wire:model="sobrenome" :disabled="$disableFields" />
                </div>
            </div>

            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-7 sm:gap-5">
                <div class="col-span-1 sm:col-span-3">
                    <x-input label="E-mail" placeholder="example@mail.com" type="text" id="email" name="email"
                        value="{{ auth()->user()->email }}" wire:ignore disabled />
                </div>
                <div class="col-span-1 sm:col-span-2">
                    <x-input label="Telefone" placeholder="Telefone" type="text" id="telefone" name="telefone"
                        wire:model="telefone" :disabled="$disableFields" />
                </div>
                <div class="col-span-1 sm:col-span-2">
                    <x-input wire:model="cep" type="text" id="cep" name="cep" wire:keydown.tab='buscarCep'
                        label="CEP" placeholder="CEP" :disabled="$disableFields" />
                </div>
            </div>

            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-7 sm:gap-5">
                <div class="col-span-1 sm:col-span-3">
                    <x-input wire:model="rua" type="text" id="rua" name="rua" wire:ignore disabled
                        label="Rua" placeholder="Rua" />
                </div>
                <div class="col-span-1 sm:col-span-1">
                    <x-input wire:model="numero" type="text" id="numero" name="numero" label="Número"
                        placeholder="Número" value="{{ auth()->user()->numero }}" :disabled="$disableFields" />
                </div>
                <div class="col-span-1 sm:col-span-3">
                    <x-input wire:model="bairro" type="text" id="bairro" name="bairro" wire:ignore disabled
                        label="Bairro" placeholder="Bairro" />
                </div>
            </div>

            <div class="col-span-1 sm:col-span-2 sm:grid sm:grid-cols-7 sm:gap-5">
                <div class="col-span-1 sm:col-span-3">
                    <x-input wire:model="cidade" type="text" id="cidade" name="cidade" wire:ignore disabled
                        label="Cidade" placeholder="Cidade" />
                </div>
                <div class="col-span-1 sm:col-span-1">
                    <x-input wire:model="estado" type="text" id="estado" name="estado" wire:ignore disabled
                        label="Estado" placeholder="Estado" />
                </div>
                <div class="col-span-1 sm:col-span-3">
                    <x-input wire:model="complemento" type="text" id="complemento" name="complemento"
                        label="Complemento" placeholder="Complemento" :disabled="$disableFields" />
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between mt-4">
            <x-toggle label="Aceite os termos e condições" aria-activedescendant="" />
            <x-button wire:click="save" label="Salvar" spinner="save"
                class="bg-blue-700 hover:bg-blue-900 text-white" />
        </div>
    </x-card>
</div>
