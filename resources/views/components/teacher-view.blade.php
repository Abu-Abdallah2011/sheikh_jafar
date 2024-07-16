
{{-- <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100"> --}}


{{-- <!-- Session Status -->
<x-success-status class="mb-4" :status="session('message')" />

<h1 class="font-bold text-center text-white">{{$class}}</h1>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"> --}}

{{-- <div class="bg-blue-500 border border-gray-200 rounded p-6">
    <div class="flex">
            <a href="curriculum_scale">
            <div class="font-bold">
                <h3 class="text-2xl">
                    Curriculum Scale
                </h3>
        </a>
        </div>
</div>
</div> --}}

            {{-- <div class="bg-purple-500 border border-gray-200 rounded p-6">
                <div class="flex">
                    <a href="class_teachers">
                        <div class="font-bold">
                            <h3 class="text-2xl">
                                Teachers: {{$teachers->count()}}
                            </h3>
                        </a>
                    </div>
                </div>
            </div> --}}

                {{-- <div class="bg-green-500 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <a href="class_students">
                            <div class="font-bold">
                                <h3 class="text-2xl">
                                    Students: {{$teacher->students->count()}}
                                </h3>
                            </a>
                        </div>
                    </div>
                </div> --}}

                    {{-- <div class="bg-pink-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="{{ url('/teachers_database/' . $teacher->id) }}">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Profile
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="bg-red-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="{{ url('/studentsHadda/' . $teacher->id) }}">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Hadda
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="bg-yellow-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="attendance/show">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Attendance
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="bg-yellow-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="exams/show">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Exams
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="bg-yellow-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="teachersAttendance/show">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                       Teachers Attendance
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- @can('isExecutive') --}}

                    {{-- <div class="bg-indigo-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="fees_database/show">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        School Fees
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-indigo-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="sets">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Sets
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="bg-violet-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="classes_database">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Classes
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-yellow-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="subjects">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Subjects
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-orange-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="suras_database">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Surahs
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="bg-yellow-500 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <a href="graduates_database">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Graduates: {{$graduates->count()}}
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="bg-yellow-500 border border-gray-200 rounded p-6">
                        <div class="flex"> --}}
                                {{-- <a href="sessions_database">
                                <div class="font-bold">
                                    <h3 class="text-2xl">
                                        Session/Term
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                        
                    {{-- @endcan

        </div>
        
</div> --}}


                    {{-- the fake dashbo --}}
                    <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                    <body class="bg-gray-100 dark:bg-gray-900">
                        <div class="min-h-screen flex flex-col">
                            <!-- Session Status -->
                        <x-success-status class="mb-4" :status="session('message')" />

                        {{-- <h1 class="font-bold text-center text-white">{{$class}}</h1> --}}
                    
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
                                                {{-- <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">{{$teachers->count()}}</p> --}}
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
                                                {{-- <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">{{$teacher->students->count()}}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                    
                                    <!-- Card Template for PROFILE -->
                                    {{-- <a href="{{ url('/teachers_database/' . $teacher->id) }}"> --}}
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
                                {{-- <a href="{{ url('/studentsHadda/' . $teacher->id) }}"> --}}
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

                                <!-- Card: Sets -->
                                {{-- <a href="sets">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-user-graduate fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Sets</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">Number of Sets</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card: Classes -->
                                <a href="classes_database">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-user-graduate fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Classes</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">Number of Classes</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card: Subjects -->
                                <a href="subjects">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-user-graduate fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Subjects</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">Number of Subjects</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card: Surahs -->
                                <a href="suras_database">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-user-graduate fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Surahs</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">Number of Suras</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card: Session/Term -->
                                <a href="sessions_database">
                                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <i class="fas fa-user-graduate fa-2x text-primary"></i>
                                            </div>
                                            <div class="ml-4">
                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-900">Sessions</h3>
                                                <p class="text-2xl font-bold text-gray-900 dark:text-gray-900">Number of Sessions</p>
                                            </div>
                                        </div>
                                    </div>
                                </a> --}}
                                </div>
                                @endcan
                                </div>
                            </main>
                        </div>
                    </body>
                    </div>
                    </div>

                