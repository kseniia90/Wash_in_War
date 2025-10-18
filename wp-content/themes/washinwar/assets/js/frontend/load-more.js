(function ($) {
  const paginationSelector = '.load-more-container + .pagination';
  $('#load-more').on('click', function () {
    let button = $(this),
      nextLink = $(paginationSelector).find('.next').attr('href');

    $.ajax({
      url: nextLink,
      type: 'GET',
      beforeSend: function () {
        button.addClass('disabled');
      },
      success: function (response) {
        let newPosts = $(response).find('#load-more-content > *'),
          newPagination = $(response).find(paginationSelector);
        nextLink = $(response).find(paginationSelector).find('.next').attr('href');
        $('#load-more-content').append(newPosts);
        $(paginationSelector).replaceWith(newPagination);

        if (nextLink) {
          button.removeClass('disabled');
        } else {
          button.hide();
        }
      }, error: function () {
        button.text('Error');
        button.addClass('disabled');
      }
    });
  });

}(jQuery));
