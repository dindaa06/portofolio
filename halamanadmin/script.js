function showSubmitAlert() {
    alert("Data added successfully!")
}

function confirmDelete() {
    if (confirm("Are you sure you delete this?")) {
       alert("Data has been deleted."); 
    } else {

    }
}

function showEditAlert() {

    var userResponse = confirm("Are you sure you want to edit this?");

    if (userResponse) {
        var newData = prompt("Insert new data");
        dataElement.innerHTML = newData;
        alert("Data edited successfully.");
    } else {
        alert("Edit cancelled.");
    } 

}