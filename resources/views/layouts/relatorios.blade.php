@extends('layouts.main')

@section('title', 'Kairos')

@section('content')

    <h1>Tela de Relatórios</h1>


    <div class="row">
        <div class="col-md-4 col-xs-4">
            <div class="form-group">
                <label for="unidadeVolume">Grupo:</label>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="unidadeVolume"
                    required>
                    <option selected disabled>Escolha uma opção</option>
                    <option>Mililitro</option>
                    <option>Litro</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 col-xs-4">
            <div class="form-group">
                <label for="volumeBolsa">Vencimento:</label>
                <input type="text" class="form-control" name="volumeBolsa" placeholder="Volume" required>
            </div>
        </div>
        <div class="col-md-4 col-xs-4">
            <div class="form-group">
                <label for="unidadeVolume">Status:</label>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="unidadeVolume"
                    required>
                    <option selected disabled>Escolha uma opção</option>
                    <option>Mililitro</option>
                    <option>Litro</option>
                </select>
            </div>
        </div>
    </div>
    </div>
    <!--next-->
    <div class="row">
        <div class="col-md-4 col-xs-4">
            <div class="form-group">
                <label for="unidadeVolume">Grupo:</label>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="unidadeVolume"
                    required>
                    <option selected disabled>Escolha uma opção</option>
                    <option>Mililitro</option>
                    <option>Litro</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 col-xs-2">
            <div class="form-group">
                <label for="volumeBolsa">Volume:</label>
                <input type="text" class="form-control" name="volumeBolsa" placeholder="Volume" required>
            </div>
        </div>
        <div class="col-md-2 col-xs-2">
            <div class="form-group">
                <label for="unidadeVolume">Un. Volume:</label>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="unidadeVolume"
                    required>
                    <option selected disabled>Escolha uma opção</option>
                    <option>Mililitro</option>
                    <option>Litro</option>
                </select>
            </div>
            <div class="col-md-6 col-xs-6">
            </div>
        </div>
    </div>
    <!--next-->
    <div class="row">
        <div class="col-md-4 col-xs-4">
            <div class="form-group">
                <label for="unidadeVolume">Grupo:</label>
                <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="unidadeVolume"
                    required>
                    <option selected disabled>Escolha uma opção</option>
                    <option>Mililitro</option>
                    <option>Litro</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 col-xs-2">

        </div>
        <div class="col-md-2 col-xs-2">

        </div>
        <div class="col-md-6 col-xs-6">

        </div>
    </div>

@endsection
