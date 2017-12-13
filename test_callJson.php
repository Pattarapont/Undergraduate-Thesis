<!DOCTYPE html>
<html>
<body>

<p>Looping through an array using a for in loop:</p>

<p id="demo"></p>
<p id="demo2"></p>

<script>

var datalocation = "";
var datalocation = [
{
  "id_location": 1,
  "name": "วัดพระศรีรัตนมหาธาตุฯ (วัดใหญ่)",
  "province": "พิษณุโลก",
  "lat": 16.823762,
  "lng": 100.262439
},
{
  "id_location": 2,
  "name": "พิพิธภัณฑ์พื้นบ้านจ่าทวี",
  "province": "พิษณุโลก",
  "lat": 16.806002,
  "lng": 100.267466
},
{
  "id_location": 3,
  "name": "วัดจุฬามณี",
  "province": "พิษณุโลก",
  "lat": 16.787483,
  "lng": 100.216875
},
{
  "id_location": 4,
  "name": "ศาลสมเด็จพระนเรศวรมหาราช",
  "province": "พิษณุโลก",
  "lat": 16.829885,
  "lng": 100.261380
},
{
  "id_location": 5,
  "name": "พิพิธภัณฑ์ทหารกองทัพภาคที่ 3",
  "province": "พิษณุโลก",
  "lat": 16.833942,
  "lng": 100.262228
},
{
  "id_location": 6,
  "name": "น้ำตกแก่งโสภา",
  "province": "พิษณุโลก",
  "lat": 16.870711,
  "lng": 100.833821
},
{
  "id_location": 7,
  "name": "อุทยานแห่งชาติภูหินร่องกล้า",
  "province": "พิษณุโลก",
  "lat": 17.003883,
  "lng": 100.994248
},
{
  "id_location": 30,
  "name": "สามเหลี่ยมทองคำ",
  "province": "เชียงราย",
  "lat": 20.352895,
  "lng": 100.082965
}];
/*

for (i in datalocation.length) {
    x += myObj.datalocation[i] + "<br>";
}
*/
var x = ""
var idLocation = "4,5,6";
var res = idLocation.split(",");
document.getElementById("demo").innerHTML = datalocation[1].name;


for(i = 0; i < res.length; i++){
	for(j = 0; j < datalocation.length; j++){
    if (datalocation[j].id_location == res[i]){
    	x += datalocation[j].name;
        }
    }
	//x += res[i]
}
document.getElementById("demo2").innerHTML = x;

</script>

</body>
</html>
