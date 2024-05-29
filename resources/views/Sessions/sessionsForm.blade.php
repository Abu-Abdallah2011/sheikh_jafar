<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sessions Entry Form') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                
                    <section>

                        <form method="POST" action="{{ url('sessionsForm') }}" enctype="multipart/form-data">
                            @csrf
                    
                            <!-- Session -->
                            <div>
                                <x-input-label for="session" :value="__('Session')" />
                                <x-text-input id="session" class="block mt-1 w-full" type="text" name="session" :value="old('session')" autofocus autocomplete="session" />
                                <x-input-error :messages="$errors->get('session')" class="mt-2" />
                            </div>

                            <!-- Term -->
                            <div>
                                <x-input-label for="term" :value="__('Term')" />
                                <select id="term" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="term" :value="old('term')" autofocus autocomplete="term">
                                    <option value="1st Term">1st Term</option>
                                    <option value="2nd Term">2nd Term</option>
                                    <option value="3rd Term">3rd Term</option>
                                </select>
                                <x-input-error :messages="$errors->get('term')" class="mt-2" />
                            </div>
                           
                            <br/>
                        <div>
                            <x-primary-button class="ml-3">
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                        </form>
                    </section>
            </div>
        </div>
    </div>
</x-app-layout>
