
const partnerButton = _('partner_button');
const right = _('right_controler');
const listStructure = _('list_structure');

function _(e) {
    return document.getElementById(e);
};

partnerButton.addEventListener('click', () => {
    listStructure.classList.remove('hide');
    listStructure.style.transition = 'transform .5s';
})

listStructure.addEventListener('click', () => {
    right.classList.remove('hide');
})

//listStructure.addEventListener('change', (i) => {
    //if(i.target.checked) {
        //right.classList.remove('hide');
        //right.style.transition = 'transform .5s';
      //}
//})
