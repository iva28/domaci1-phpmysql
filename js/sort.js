th = document.getElementsByTagName('th');
  for (let it = 0; it< th.length; it++) {

    th[it].addEventListener('click', item(it));
  }

  function item(it) {

    return function() {
      console.log(it);
      sortTable(it);
    }
  }

  function sortTable(it) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;

    while (switching) {
    
      switching = false;
      rows = table.rows;
    
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("TD")[it];
        y = rows[i + 1].getElementsByTagName("TD")[it];
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }