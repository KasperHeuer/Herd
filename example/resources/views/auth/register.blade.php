<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="name" id="name" required
                                class="border border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500" />
                            <x-form-error name='name' />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:border-indigo-500 focus-within:ring-indigo-500">
                                <input type="email" name="email" id="email" required
                                    class="block min-w-0 grow py-1.5 pr-3 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                            </div>
                        </div>
                        @error('email')
                            <p class="text-red-500 italic">{{ $message }}</p>
                        @enderror
                    </x-form-field>

                    <x-form-field>
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:border-indigo-500 focus-within:ring-indigo-500">
                                <input type="password" name="password" id="password" required
                                    class="block min-w-0 grow py-1.5 pr-3 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                            </div>
                        </div>
                        @error('password')
                            <p class="text-red-500 italic">{{ $message }}</p>
                        @enderror
                    </x-form-field>

                    <x-form-field>
                        <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-900">Password
                            confirm</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 border border-gray-300 focus-within:border-indigo-500 focus-within:ring-indigo-500">
                                <input type="password" name="password_confirmation" id="password_confirmation" required
                                    class="block min-w-0 grow py-1.5 pr-3 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                            </div>
                        </div>
                        @error('password_confirmation')
                            <p class="text-red-500 italic">{{ $message }}</p>
                        @enderror
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
