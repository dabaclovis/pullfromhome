@extends('layouts.app')

@section('content')
    <div class=" container">
        <div class=" w3-center">
            <h3>Welcome to the world of Automation</h3>
            <p>I will be giving you an overview of some
                 of the most popular devops tools in the market</p>
                <p>As seen on the left, we will learning about each mentioned tool.
                    The order of occurance will be strickly followed.
                </p>
                <p>Your are more than welcome to contact me, contact information will be found on my
                    <a href="{{ route('pages.about') }}"> about us page</a>
                </p>

        </div>
    </div>
    <p>As mentioned earlier, I will be giving you my ideas on:
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Git</td>
                <td>Jenkins</td>
                <td>Docker</td>
            </tr>
            <tr>
                <td>Linux</td>
                <td>Ansible</td>
                <td>Terraform</td>
            </tr>
            <tr>
                <td>Maven</td>
                <td>Nagios</td>
                <td>K8s</td>
            </tr>
        </tbody>
    </table></p>
    <p>I will appreciate and welcome your ideas on how to
         improve the layout out and the content found on the website.
        </p>

@endsection
