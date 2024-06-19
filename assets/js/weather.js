/*軽井沢の天気を表示（open weather mapを使用）*/
$(function() {
  console.log('temp');
  if($('.js-weather-temp').length > 0) {

    $.ajax({
      cache: false,
      dataType: 'json',
      url: 'https://api.openweathermap.org/data/2.5/weather?zip=389-0111,JP&appid=16559aa37fcd6113a101c1705eed1609',
      success: function(data) {
        // 気温
        $('.js-weather-temp').text(Math.round(data.main.temp - 273.15));
        FONTPLUS.reload(true);

        // 天気のアイコン
        let icon = data.weather[0].icon;
				icon = icon.slice(0,2);
        let icon_font = '';
        
        console.log(icon);
        
        switch(icon) {
          case '01' : //clear sky
            icon_font = '<i class="fa-solid fa-sun"></i>';
            break;
            
          case '02' : //few clouds
            icon_font = '<i class="fa-solid fa-cloud-sun"></i>';
            break;
            
          case '03' : //scattered clouds
            icon_font = '<i class="fa-solid fa-cloud"></i>';
            break;
            
          case '04' : //broken clouds
            icon_font = '<i class="fa-solid fa-cloud"></i>';
            break;
            
          case '09' : //shower rain
            icon_font = '<i class="fa-solid fa-cloud-rain"></i>';
            break;
            
          case '10' : //rain
            icon_font = '<i class="fa-solid fa-umbrella"></i>';
            break;
            
          case '11' : //thunderstorm
            icon_font = '<i class="fa-solid fa-bolt"></i>';
            break;
            
          case '13' : //snow
            icon_font = '<i class="fa-solid fa-snowflake"></i>';
            break;
            
          case '50' : //mist
            icon_font = '<i class="fa-solid fa-water"></i>';
            break;
        }
        $('.js-weather-icon').html(icon_font);
      }
    });
  }
});