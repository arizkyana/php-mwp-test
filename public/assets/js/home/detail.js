$(document).ready(() => {
  const id = $('#id').val();



  $('#table-detail').DataTable({
    searching: false,
    lengthChange: false,
    ajax: {
      url: `/api/list_detail_calls/${id}`,
      method: 'GET'
    },

    columns: [{
      data: 'ID'
    }, {
      data: 'Date'
    }, {
      data: 'Details'
    }, {
      data: 'Hours'
    }, {
      data: 'Minutes'
    }]
  });

  // search text
  $('#search-text').change(function (e) {
    const query = $(this).val();

    $
      .ajax({
        url: '/api/search',
        method: 'POST',
        data: {
          query
        }
      })
      .then(function (response) {
        console.log(response)
      })
      .catch(function (err) {
        console.log(err);
      })
  })

  $('#end_date').change(function (e) {
    const data = {
      start_date: $('#start_date').val(),
      end_date: $('#end_date').val()
    };
    $
      .ajax({
        url: '/api/search_date',
        method: 'POST',
        data
      })
      .then(function (response) {
        console.log(response)
      })
      .catch(function (err) {
        console.log(err);
      })
  })

})