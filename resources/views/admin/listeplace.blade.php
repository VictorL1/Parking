@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <link rel="stylesheet" href="css\listeutilisateur.css">
    <h3>LISTE DES PLACES</h3>
</div>
<div class="container mb-3 mt-3">
    <table class="table">
        <thead>
            <th scope="col">Numero de la place</th>
            <th scope="col">Supprimer / Ajouter</th>
        </thead>
        <tbody>
            @foreach ($listeplace as $listeplacedata)
            <tr>
                <td>{{$listeplacedata->numeroPlace}}</td>
                @for ($i = 1; $i < $nbplaceprise; $i++)
                    @if ($listeplacedata->numeroPlace == $placeprise[$i])
                        <td>
                            <button type="submit" name="idParking" class="btn-danger" onclick="alert('Impossible de supprimer cette place')" value={{$listeplacedata->idParking}}> Supprimer </button>
                            @break
                        </td>
                    @else
                        <form action="DeletePlace" method="post">
                            @csrf
                            <input type="hidden" name="id" value={{$_POST['id']}}>
                            <td>
                                <button type="submit" name="idParking" class="btn-danger" value={{$listeplacedata->idParking}}> Supprimer </button>
                            </td>
                        </form>
                        @break
                    @endif
                @endfor
            </tr>
            @endforeach
            <tr width='10%'>
                <form action="AjoutPlace" method="post">
                    @csrf
                    <input type="hidden" name="id" value={{$_POST['id']}}>
                    <td>
                        <?php
                        $numeroPlace = str_split($listeplacedata->numeroPlace);
                        if ($numeroPlace[1] == "0") {
                            $lettre = $numeroPlace[2];
                            $nombre = 1;
                            $lettre++;
                        }
                        else {
                            $lettre = $numeroPlace[1];
                            $nombre = $numeroPlace[0];
                            $nombre++;
                        }
                        $numeroPlace = $nombre.$lettre;
                        ?>
                        <input type="text" name="numeroPlace" class="form-control" value={{$numeroPlace}} readonly>
                    </td>
                    <td>
                        <input type="submit" class="btn-primary" value="Ajouter">
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>
@endsection
