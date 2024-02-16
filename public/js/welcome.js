document.addEventListener('DOMContentLoaded', function() {
    console.log("Documento carregado");

    @if(session('msg'))
    Swal.fire({
        title: 'Error!',
        text: '{{ session('msg') }}',
    });
    @endif

    document.getElementById("searchInput").addEventListener("keyup", function() {
        console.log("Tecla pressionada");

        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        console.log("Texto digitado: ", input.value);
        filter = input.value.toUpperCase();
        table = document.getElementById("tableBody");
        console.log("Tabela: ", table);
        tr = table.getElementsByTagName("tr");
        console.log("Linhas da tabela: ", tr);
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().includes(filter)) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none"; // Se não houver correspondência, ocultar a linha
                }
            }
        }
    });
});
