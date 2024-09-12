// $(document).on('click',"#add-new-transaction",function(){
//     $("#add-new-account-modal").modal('toggle')
// })

let accountAction ='';

$(document).on('click',"#add-new-account",function(){
    $("#add-new-account-modal").modal('toggle')
    accountAction = 'create';

})

// this is to get data sa modal form
$(document).on('click',"#create-or-update-account", async function(){
    // alert('saved');

    const inputs = $("#add-new-account-modal .modal-body :input");// meaning: every value na entered gamit ang input tags note: kapag walang colon before ang input lahat pati select tags makukuwa
    // console.log(inputs);
    let objectAccount = {};
    for (const [key, value] of Object.entries (inputs)){
        // console.log(inputs);
        const name = $(value).attr('name'); // kukunin value ng bawat input tags using the attribute "name" tapos ilalagay sa variable name
        if (name) {
            const inputValue = $(value).val();
            // console.log(inputValue); // naka array sya
            objectAccount[name] = inputValue; //gagawing object sya dito
        }
    }


//setup csrf token only
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
            'content'
        ),
        //rights : currentUserRight,
    },
});


//request to push to the backend
const { success, msg } = await $.ajax({
    type: 'POST',
    url: 'api/createorupdateaccount',//nasa routes /api.php
    data: {
        objectAccount: objectAccount
    }
});

Swal.fire({
    icon: success?'success':'error',
    title: msg,
    showCloseButton: false,
    showCancelButton: false,
}).then((e)=>{
    $("#add-new-account-modal").modal('toggle')
        Livewire.dispatch('refreshBudgetlist');
});


    // console.log(objectAccount);
});

