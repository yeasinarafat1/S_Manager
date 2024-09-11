let searchInp = document.getElementById("searchInput");
searchInp.addEventListener("input", function () {
  let searchTerm = this.value.toLowerCase();
  let table = document.getElementById("myTable");
  let rows = table.getElementsByTagName("tr");
  let noSearchResult = document.getElementById("noSearchResult");
  // Iterate through table rows (skip header row)
  // console.log(rows[0]);
  let isNoSearch = [];
  let SearchResultText = document.getElementById("SearchResult");
  if (searchTerm) {
    SearchResultText.classList.remove("hidden");
    SearchResultText.innerHTML = `Searching For <span class="fw-bold text-success">${searchTerm}</span>`;
  } else {
    SearchResultText.classList.add("hidden");
  }

  for (let i = 1; i < rows.length; i++) {
    let row = rows[i];
    // console.log(row);

    let cells = row.getElementsByTagName("td");
    console.log(cells);

    let rowText = "";
    // console.log(cells);
    // Concatenate all text content of the row cells
    for (let j = 0; j < cells.length; j++) {
      rowText += cells[j].textContent.toLowerCase() + " ";
      // console.log(rowText);
    }

    // Check if the search term is found in the row text
    if (rowText.includes(searchTerm)) {
      row.style.display = "";
      isNoSearch.push(rowText);
    } else {
      row.style.display = "none";
    }
  }
  console.log(isNoSearch.length);

  if (isNoSearch.length === 0) {
    noSearchResult.classList.remove("hidden");
  } else {
    noSearchResult.classList.add("hidden");
  }
});
//Todo Add a keyboard shortcut to quickly search
// document.addEventListener("keydown", (e) => {
//   if (e.key === "Control") {
//     document.addEventListener("keydown", (e) => {
//       if (e.key === "K") {
//         console.log(e.key);

//         searchInp.focus;
//         console.log(e.key);
//       }
//     });
//   }
// });
