function rgb(r, g, b){
    var hex = "";
    for (var i = 0; i < 3; i++) {
        var num = arguments[i];
        if (num > 255) {
        num = 255;
        } else if (num < 0) {
        num = 0;
        }
        var hexNum = num.toString(16);
        if (hexNum.length < 2) {
        hexNum = "0" + hexNum;
        }
        hex += hexNum;
    }
  return hex.toUpperCase(); 
}