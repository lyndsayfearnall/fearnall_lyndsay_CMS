(function(){
  //set the user's timezone
    let timezoneOffset = new Date().getTimezoneOffset(); //gives timezone difference +- UTC
        timezoneOffset = timezoneOffset == 0 ? 0 : -timezoneOffset; //add the opposite + or - sign to local timezone to match offset

    console.log(timezoneOffset);

    // function getTimezone(){
    //   const url = 'admin/adminIndex.php';
    //
    //     fetch(url)
    //       .then((resp) => resp.json())
    //       .then((data) => {
})();
