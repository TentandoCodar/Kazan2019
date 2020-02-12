window.onload = () => {
    let oldHtml = "";
    const newEvent = document.getElementById('NewEvent');
    const cancelButton = document.getElementById('CancelButton');
    newEvent.addEventListener('click', handleClick);
    cancelButton.addEventListener('click', handleModalCancel)

    function handleClick() {
        document.body.querySelector('#NewEventForm').classList.remove('NOTDISPLAY');
        document.body.querySelector('#NewEventForm').classList.add('DISPLAY');

    }

    function handleModalCancel() {
        document.getElementById('NewEventForm').classList.remove('DISPLAY');
        document.body.querySelector('#NewEventForm').classList.add('NOTDISPLAY');
    }
}