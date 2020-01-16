const hourWorke = 6 //часов рабочего времени
const hourBreak = 1 //часов времени на перерывы
const hourOnTheWay = 1.2//время в дороге
const timetable = [hourWorke,hourBreak,hourOnTheWay] //массив содержащий затраты времени на работу втечении дня
const ollTime = timetable.map(minutes)//вычисляем какие затраты в минутах
function minutes(hours){//функция перевода часов в минуты
 const minutes = hours*60
 return minutes
}
console.log(ollTime)//вывод результата

under_score = 15
