
const partnerButton = _('partner_button');
        const right = _('right_controler');
        const listStructure = _('list_structure');

partnerButton.addEventListener('click', showList);

function _(e){
    return document.getElementsByClassName(e);
};

function showList(){
    listStructure.classList.remove('hide');
}

