var rows = document.querySelectorAll('.kennedi');
rows.forEach(btn => {
  btn.addEventListener('click', function() {
    var url = "view_item.php?id=" + this.id;
    console.log(url);
    window.location = url;
  });
});







// function tableFilter() {
//     var input, filter, table, tr, td, i, txtValue;
//     input = document.getElementById("searchBar");
//     filter = input.value.toUpperCase();
//     table = document.getElementById("dataTable");
//     tr = table.getElementsByTagName("tr");
//     for (i = 0; i < tr.length; i++) {
//         td = tr[i].getElementsByTagName("td")[3];
//         if (td) {
//         txtValue = td.textContent || td.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//             tr[i].style.display = "";
//         } else {
//             tr[i].style.display = "none";
//         }
//         }       
//     }
// }
