                    {{-- the dashboard --}}
                    <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                    <body class="bg-gray-100 dark:bg-gray-900">
                        <div class="min-h-screen flex flex-col">
                            <!-- Session Status -->
                        <x-success-status class="mb-4" :status="session('message')" />

                        <h1 class="font-bold text-center text-white">{{$class}}</h1>
                    
                            <!-- Main Content -->
                            <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                                    <!-- Card: Number of Teachers -->
                                    <a href="class_teachers">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Teachers</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">{{$teachers->count()}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                    
                                    <!-- Card: Number of Students -->
                                    <a href="class_students">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-users fa-2x text-success"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Students</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">{{$teacher->students->count()}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                    
                                    <!-- Card Template for PROFILE -->
                                    <a href="{{ url('/teachers_database/' . $teacher->id) }}">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-user fa-2x text-warning"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Bio Data</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">Profile</p>
                                            </div>
                                        </div>
                                    </div>
                                    </a>

                                <!-- Card: Hadda -->
                                <a href="{{ url('/studentsHadda/' . $teacher->id) }}">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-file-alt fa-2x text-danger"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Hadda</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">% Hadda</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card: Attendance -->
                                <a href="attendance/show">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-chart-pie fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Attendance</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">% Attendance</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                    <!-- End of Card Template for EveryOne -->
                    
                                </div>

                                @can('isExecutive')

                                <hr class="my-4 border-gray-300 dark:border-gray-500">

                                {{-- Beginning of Card Templates for Excos Only --}}
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                                    <!-- Card: School Fees -->
                                <a href="fees_database/show">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-money-check-alt fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">School Fees</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">% Payed</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card: Number of Graduates -->
                                <a href="graduates_database">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-user-graduate fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Graduates</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">{{$graduates->count()}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                @endcan
                                </div>
                            </main>
                        </div>
                    </body>
                    </div>
                    </div>

                