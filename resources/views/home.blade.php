@extends('layouts.app')


@section('main')
    {{-- HERO --}}


    <x-home.hero />

 

    <x-home.partner />

    {{-- Our Services --}}
     <x-home.services />


    {{-- POS --}}

    <x-home.pos />



    {{-- Download --}}


    <x-home.download />



    {{-- Loan --}}

    <x-home.loan />



    {{-- Customer --}}

    <x-home.customer />


    {{-- Regulated  --}}

        <x-home.regulation />



    {{-- Subscribe --}}

    <x.home.subsribe />



@endsection
