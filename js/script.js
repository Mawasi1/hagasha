function validateForm(){
let clothingName = document.addClothingForm.item.value;
let clothingSize = document.addClothingForm.size.value;
let clothingCloset = document.addClothingForm.closet.value;
let clothingCategory = document.addClothingForm.category.value;
let clothingBrand = document.addClothingForm.brand.value;
let errorFlag = 0;

    if (!clothingName) {
        window.setTimeout(function() { document.addClothingForm.item.focus(); },0);
        document.getElementById(`invalidName`).style.display = `block`;
        window.alert(`Please write The clothing item's name`)
        errorFlag = 1;
    }
    if (clothingSize == `default`){
        window.setTimeout(function() { document.addClothingForm.item.focus(); },0);
        document.getElementById(`invalidName`).style.display = `block`;
        window.alert(`Please write The clothing item's name`)
        if (errorFlag = 0){
            window.setTimeout(function() { document.addClothingForm.size.focus(); },0);
            errorFlag = 1;
        }
    }

    // if there is an error, don't submit the form
    if (errorFlag == 1){
        errorFlag = 0;
        return false
    }
    return true;
}