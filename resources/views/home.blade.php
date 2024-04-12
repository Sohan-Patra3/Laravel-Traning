<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        welcome,

        {{ $name ?? 'guest' }}
    </h1>

    {{-- To restrict XSS --}}

    {!! $var !!}


    {{-- Conditional Directives --}}
    @if ($name == '')
        {{ 'Name is Empty' }}
    @elseif($name == 'rakesh')
        {{ 'Name is correct' }}
    @else
        {{ 'Name is incorrect' }}
    @endif

    <br>

    @unless ($name == '')
        {{ 'Name is empty' }}
    @endunless

    <br>

    @isset($name)
        {{ 'Name is Rakesh' }}
    @endisset

    @empty($name)
        {{ 'No Name' }}
    @endempty

    <br>

    @env('local')
    {{ 'local is working' }}
    @endenv

    <br>

    @env(['local', 'staging'])
    {{ 'local $ staging is working' }}
    @endenv

    <br>

    @php
        $color = 'red';
    @endphp

    @switch($color)
        @case('green')
            {{ 'Color is green' }}
        @break

        @case('red')
            {{ 'Color is red' }}
        @break

        @default
            {{ 'Color is neither green nor red' }}
    @endswitch

    <br>

    {{-- for loop --}}
    @for ($i = 0; $i < 10; $i++)
        {{ $i }}
    @endfor

    <br>

    {{-- while loop --}}

    @php
        $num = 1;
    @endphp

    @while ($num <= 8)
        {{ $num }}

        @php
            $num++;
        @endphp
    @endwhile


    {{-- foreach --}}
    @php
        $arr = [
            'Andhra Pradesh',
            'Arunachal Pradesh',
            'Assam',
            'Bihar',
            'Chhattisgarh',
            'Goa',
            'Gujarat',
            'Haryana',
            'Himachal Pradesh',
            'Jammu and Kashmir',
            'Jharkhand',
            'Karnataka',
            'Kerala',
            'Madhya Pradesh',
            'Maharashtra',
            'Manipur',
            'Meghalaya',
            'Mizoram',
            'Nagaland',
            'Odisha',
            'Punjab',
            'Rajasthan',
            'Sikkim',
            'Tamil Nadu',
            'Telangana',
            'Tripura',
            'Uttarakhand',
            'Uttar Pradesh',
            'West Bengal',
            'Andaman and Nicobar Islands',
            'Chandigarh',
            'Dadra and Nagar Haveli',
            'Daman and Diu',
            'Delhi',
            'Lakshadweep',
            'Puducherry',
        ];

        echo '<pre/>';
        print_r($arr);
    @endphp

    <select name="" id="">
        @foreach ($arr as $key => $state)
            <option value="{{ $key }}">{{ $state }}</option>
        @endforeach
    </select>

    <br>
    {{-- forelse loop --}}

    @php
        $arr1 = [1, 2, 3, 4, 5];
    @endphp

    @forelse ($arr1 as $item)
        {{ $item }}
    @empty
        {{ 'No items' }}
    @endforelse


    <br>

    {{-- break and continue directives --}}

    @php
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    @endphp

    @foreach ($arr as $var)
        @if ($var == 4)
            {{-- @break --}}
            @continue
        @endif

        {{ $var }}
    @endforeach

    <br>
    {{-- loop variable --}}

    @php
        $users = [1, 2, 3, 4, 5, 6, 7];
    @endphp

    @foreach ($users as $user)
        @if ($loop->first)
            This is the first iteration.
        @endif

        {{ $user }}
    @endforeach


</body>

</html>
