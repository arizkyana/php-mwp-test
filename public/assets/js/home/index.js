$(document).ready(() => {
  const table = $('#table-detail').DataTable({
    lengthChange: false,
    ajax: {
      url: '/api/list_calls',
      method: 'GET'
    },

    columns: [{
      data: 'ID'
    }, {
      data: 'CallDate'
    }, {
      data: 'ITPerson'
    }, {
      data: 'UserName'
    }, {
      data: 'Subject'
    }, {
      data: 'ID',
      orderable: false,
      render: function (data, type, row, meta) {
        return `
            <a href="/home/detail/${data}" class="btn btn-sm white btn-secondary">Detail</a>
            <button class="btn btn-sm btn-danger">Delete</a>
          `
      }
    }]
  });

  // search text


  $('#end_date').change(function (e) {
    const data = {
      start_date: $('#start_date').val(),
      end_date: $('#end_date').val()
    };

    const filter = $('#form-filters').serialize();

    table.ajax
      .url(`/api/list_calls?${filter}`)
      .load()
      .draw(true);
  })

})