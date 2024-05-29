<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('School Fees Database') }}

        </h2>
    </x-slot>
    <x-search />
    <x-success-status class="mb-4" :status="session('message')" />

    <div class="py-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="text-center">
                        <h1 class="text-3xl font-bold mt-8 mb-4">STUDENTS FEES RECORDS FOR {{ $session }} ACADEMIC SESSION</h1>
                    </div>
                   @php
                    $termsToCheck = ['1st Term', '2nd Term', '3rd Term'];
                   @endphp
                    
                    <table class="border-collapse w-full table-responsive">
                        <thead>
                  
                            <tr>
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">ID</th>
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">NAME</th>
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">CLASS</th>
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">PREV. SESSION</th>
                                @foreach ($termsToCheck as $termToCheck)
                                @if ($termToCheck === '1st Term')
                                @if ($firstTerm === null)
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">PENDING</th>
                                @else
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">{{ $firstTerm->term }}</th>
                                @endif
                                @elseif ($termToCheck === '2nd Term')
                                @if ($secondTerm === null)
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">PENDING</th>
                                @else
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">{{ $secondTerm->term }}</th>
                                @endif
                                @elseif ($termToCheck === '3rd Term')
                                @if ($thirdTerm === null)
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">PENDING</th>
                                @else
                                <th class="text-center font-bold uppercase bg-gray-200  p-2 md:p-3 lg:p-4 text-gray-600 border border-gray-300 lg:table-cell">{{ $thirdTerm->term }}</th>
                                @endif
                                @endif
                            @endforeach
                            </tr>
                        
                        </thead>

                        <tbody>
                            @foreach($students as $student)
                      
                                <tr class="bg-white lg:hover:bg-gray-100 lg:table-row mb-10 lg:mb-0">
                                <td class="w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static">{{ $student->id }}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static">{{--<a href="{{ url('/fees_record/' . $student->id )}}">--}}{{ $student->fullname }}{{--</a>--}}</td>
                                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b lg:table-cell relative lg:static">{{ $student->class }}</td>

                                    @php
                                    $PreviousSessionUrl = url('/fees_record/' . $student->id . '/PreviousSessions');
                                    @endphp

                                    @if($student->eligible)
                                        <td class="w-full bg-green-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static"><a href="{{ $PreviousSessionUrl }}">CLEARED</a></td>
                                    @else
                                        <td class="w-full bg-red-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static"><a href="{{ $PreviousSessionUrl }}">NOT CLEARED</a></td>
                                    @endif

                                    @php
                                        $studentFees = $student->fees->where('session', $session);
                                    @endphp

                                    @foreach ($studentFees->unique('session') as $record)

                                    @php
                                    $status = $record->status; 
                                    $url = url("/fees_record/{$student->id}/{$record->term}/" . str_replace('/', '_', $record->session) . '/edit_fees');
                                    @endphp

                                        @if($record->term === '1st Term')
                                    @if ($status === 'PAID')
                                    <td class="w-full bg-green-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'PART')
                                    <td class="w-full bg-yellow-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'FREE')
                                    <td class="w-full bg-purple-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'UNCLEARED')
                                    <td class="w-full bg-red-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @endif

                                    <a href="{{ $url }}">
                                    {{ $status }}
                                    </a>
                                    </td>
                                    @else
                                    <td class="w-full bg-gray-300 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static"></td>
                                    @endif
                                    @if($record->term === '2nd Term')
                                    @if ($status === 'PAID')
                                    <td class="w-full bg-green-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'PART')
                                    <td class="w-full bg-yellow-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'FREE')
                                    <td class="w-full bg-purple-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'UNCLEARED')
                                    <td class="w-full bg-red-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @endif

                                    <a href="{{ $url }}">
                                    {{ $status }}
                                    </a>
                                    </td>
                                    @else
                                    <td class="w-full bg-gray-300 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static"></td>
                                    @endif
                                    @if($record->term === '3rd Term')
                                    @if ($status === 'PAID')
                                    <td class="w-full bg-green-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'PART')
                                    <td class="w-full bg-yellow-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'FREE')
                                    <td class="w-full bg-purple-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @elseif ($status === 'UNCLEARED')
                                    <td class="w-full bg-red-500 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static">
                                    @endif

                                    <a href="{{ $url }}">
                                    {{ $status }}
                                    </a>
                                    </td>
                                    @else
                                    <td class="w-full bg-gray-300 lg:w-auto p-3 text-white border border-b lg:table-cell relative lg:static"></td>
                                    @endif
                                    @endforeach
                                    
                                  </tr>

                                  @endforeach
                      
                            </tbody>
                    </table>

                </div>
            </div>
    </div>

</x-app-layout>