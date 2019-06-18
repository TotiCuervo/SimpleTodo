@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="d-inline-block">
                <table class="f-l">
                    <tbody>
                    <tr>
                        <td class="align-middle">
                            <div>
                                <button class='no-button float-left'>
                                    <i class="far fa-check-circle fa-3x" id="hidden"></i>
                                    <i class="fas fa-check-circle fa-3x success" id="shown"></i>
                                </button>
                                <h1>A Simple To Do List</h1>
                            </div>
                            <p>By Toti Cuervo using Laravel Framework</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $('#hidden').show();
            $('#shown').hide();

            $('button').click(function(){
                $('#hidden').hide();
                $('#shown').show();
            });

        });
    </script>
@stop