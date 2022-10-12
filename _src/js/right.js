
const partnerButton = _('partner_button');
const right = _('right_controler');
const listStructure = _('list_structure');

function _(e) {
    return document.getElementById(e);
};

partnerButton.addEventListener('click', () => {
    listStructure.classList.remove('hide');
})
