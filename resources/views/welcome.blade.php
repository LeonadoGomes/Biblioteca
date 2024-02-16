@extends('layouts.main')
@section('title', 'Biblioteca')
@section('content')

    <div class="container">
        <input type="text" id="searchInput" placeholder="Pesquisar...">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Inglês</th>
                        <th>Português</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    @foreach ($cadastro as $cadastros)
                        <tr>
                            <td>{{ $cadastros->id }}</td>
                            <td>{{ $cadastros->ingles }}</td>
                            <td>{{ $cadastros->portugues }}</td>
                            <td>
                                <ion-icon name="trash-bin-outline"></ion-icon>
                                &nbsp;
                                <ion-icon name="pencil-outline"></ion-icon>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="button-container">
            <a href="/cadastro" class="fixed-button">Adicionar Palavra</a>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            @if (session('msg'))
                Swal.fire({
                    title: 'Error!',
                    text: '{{ session('msg') }}',
                });
            @endif
            var searchInput = document.getElementById("searchInput");
            if (searchInput) {
                searchInput.addEventListener("keyup", function() {
                    var filter = searchInput.value.toUpperCase();
                    var tableBody = document.getElementById("tableBody");
                    var rows = tableBody.getElementsByTagName("tr");

                    for (var i = 0; i < rows.length; i++) {
                        var row = rows[i];
                        var cells = row.getElementsByTagName("td")[1];

                        if (cells) {
                            var textValue = cells.textContent || cells.innerText;
                            if (textValue.toUpperCase().indexOf(filter) > -1) {
                                row.style.display = "";
                            } else {
                                row.style.display = "none";
                            }
                        }
                    }
                });
            }
        });
    </script>
