function validateForm(){
let clothingName = document.addClothingForm.item.value;
let clothingSize = document.addClothingForm.size.value;
let clothingCloset = document.addClothingForm.closet.value;
let clothingCategory = document.addClothingForm.category.value;
let clothingBrand = document.addClothingForm.brand.value;
let errorFlag = 0;

    //hiding all error texts on the page in case some were fixed
    document.getElementById(`invalidName`).style.display = `none`;
    document.getElementById(`invalidSize`).style.display = `none`;
    document.getElementById(`invalidBrand`).style.display = `none`;
    document.getElementById(`invalidCategory`).style.display = `none`;
    document.getElementById(`invalidCloset`).style.display = `none`;

    if (!clothingName) {
        window.setTimeout(function() { document.addClothingForm.item.focus(); },0);
        document.getElementById(`invalidName`).style.display = `block`;
        window.alert(`Please write The clothing item's name`);
        errorFlag = 1;
    }
    if (clothingSize == `default`){
        window.setTimeout(function() { document.addClothingForm.size.focus(); },0);
        document.getElementById(`invalidSize`).style.display = `block`;
        window.alert(`Please select a size from the dropdown list`);
        if (errorFlag == 0){
            window.setTimeout(function() { document.addClothingForm.size.focus(); },0);
            errorFlag = 1;
        }
    }
    if (clothingCloset == `default`){
        window.setTimeout(function() { document.addClothingForm.closet.focus(); },0);
        document.getElementById(`invalidCloset`).style.display = `block`;
        window.alert(`Please select a closet from the dropdown list`);
        if (errorFlag == 0){
            window.setTimeout(function() { document.addClothingForm.closet.focus(); },0);
            errorFlag = 1;
        }
    }
    if (clothingCategory == `default`){
        window.setTimeout(function() { document.addClothingForm.category.focus(); },0);
        document.getElementById(`invalidCategory`).style.display = `block`;
        window.alert(`Please select a category from the dropdown list`);
        if (errorFlag == 0){
            window.setTimeout(function() { document.addClothingForm.category.focus(); },0);
            errorFlag = 1;
        }
    }
    if (clothingBrand == `default`){
        window.setTimeout(function() { document.addClothingForm.brand.focus(); },0);
        document.getElementById(`invalidBrand`).style.display = `block`;
        window.alert(`Please select a brand from the dropdown list`);
        if (errorFlag == 0){
            window.setTimeout(function() { document.addClothingForm.brand.focus(); },0);
            errorFlag = 1;
        }
    }
    console.log(`final: ` +errorFlag);
    // if there is an error, don't submit the form
    if (errorFlag == 1){
        errorFlag = 0;
        return false
    }
    return true;
}