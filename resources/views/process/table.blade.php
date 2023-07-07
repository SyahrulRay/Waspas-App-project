<x-app-layout>

    <div class="container mx-auto px-8 items-center justify-center mt-14">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-950 mb-8 text-center">Please Input Data</h2>
        <label for="">Number of Rows</label><input type="text" name="" id="rows">
        <label for="">Number of Columns</label><input type="text" name="" id="cols">
        <Button onclick="CreateTable()">Create</Button>
        <div id="tablearea" class="justify-center mt-8">

        </div>
    </div>



</x-app-layout>
<script>
    function CreateTable() {
        let rows = document.getElementById("rows").value;
        let cols = document.getElementById("cols").value;

        var table = "<table border='1' class=\"table-fix w-full\" >";

        for (let r = 0; r < rows; r++) {

            table += "<tr>";

            for (let c = 0; c < cols; c++) {
                table += "<td><input class=\"rounded-md w-full\" type=\"text\"></td>";
            }

            table += "</tr>";
        }
        table += "</table>";

        document.getElementById("tablearea").innerHTML = table;
    }
</script>