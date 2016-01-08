/*加载年份*/
function years(obj, Cyear) {
    var len = 36; // select长度,即option数量
    var selObj = document.getElementById(obj);
    var selIndex = len - 1;
    var newOpt; // OPTION对象

    // 循环添加OPION元素到年份select对象中
    for (i = 1; i <= len; i++) {
        if (selObj.options.length != len) { // 如果目标对象下拉框升度不等于设定的长度则执行以下代码
            newOpt = window.document.createElement("OPTION"); // 新建一个OPTION对象
            newOpt.text = Cyear - len + i; // 设置OPTION对象的内容
            newOpt.value = Cyear - len + i; // 设置OPTION对象的值
            selObj.options.add(newOpt, i); // 添加到目标对象中
        }

    }
}

function months(){
    var month = document.getElementById("month");
    var month_eng = new Array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    month.length = 0;
    for (i = 1; i < month_eng.length; i++) {
        month.options.add(new Option(month_eng[i], i));
    }

}

function change_date(){
   // var birthday = document.birthday;
    var year  = document.getElementById("year");
    var month = document.getElementById("month");
    var day   = document.getElementById("date");
    vYear  = parseInt(year.value);
    vMonth = parseInt(month.value);
    date.length=0;

    //根据年月获取天数
    var max = (new Date(vYear,vMonth, 0)).getDate();
    for (var i=1; i <= max; i++) {
        date.options.add(new Option(i, i));
    }
}

function heights(obj, height_top) {
  var len = 40;
  var selObj = document.getElementById(obj);
  var selIndex = len - 1;
  var newOpt;
  for (i = 1; i <= len; i ++)
    if (selObj.options.length != len) {
      newOpt = window.document.createElement("OPTION");
      newOpt.text = height_top - len + i;
      newOpt.value = height_top - len + i;
      selObj.options.add(newOpt, i);
    }
}

function weights(obj, weight_top) {
  var len = 40;
  var selObj = document.getElementById(obj);
  var selIndex = len - 1;
  var newOpt;
  for (i = 1; i <= len; i ++)
    if (selObj.options.length != len) {
      newOpt = window.document.createElement("OPTION");
      newOpt.text = weight_top - len + i;
      newOpt.value = weight_top - len + i;
      selObj.options.add(newOpt, i);
    }
}

function sexs(){
    var sex = document.getElementById("sex");
    var sex_str = new Array("", "男", "女");
    sex.length = 0;
    for (i = 1; i < sex_str.length; i++) {
        sex.options.add(new Option(sex_str[i], i));
    }
}

function grades(){
    var grade = document.getElementById("grade");
    var grade_str = new Array("", "本科大一", "本科大二", "本科大三", "本科大四", "本科毕业", "硕士研究生", "硕士毕业", "博士研究生", "博士毕业");
    grade.length = 0;
    for (i = 1; i < grade_str.length; i++) {
        grade.options.add(new Option(grade_str[i], i));
    }
}

function majors(){
    var major = document.getElementById("major");
    var major_str = new Array("", "文科", "理科", "工科", "医科");
    major.length = 0;
    for (i = 1; i < major_str.length; i++) {
        major.options.add(new Option(major_str[i], i));
    }
}
