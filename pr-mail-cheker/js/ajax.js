document.addEventListener("DOMContentLoaded", function () {
  const testBtn = document.querySelector('#btn_send');

  if (!testBtn) {
    return;
  }

  testBtn.addEventListener('click', async () => {

    myAjax().then((data) => {
      console.info('Response:', data);
    })

  });
});

async function myAjax() {
  let result
  try {
    const data = new FormData();
    data.append('action', 'get_ajax');
    result = await fetch(simple_ajax_url_obj.ajax_url, {
      method: 'POST',
      body: data
    })
    return result
  } catch (error) {
    console.error(error)
  }
}