<div id="container">
    <div class="about_main">
        <div class="about_contents">
            <div class="about_logo">
                <img src="https://nalazoocare.com/klinix/img/about/main_logo.png" alt="">
            </div>
            <p class="about_txt">
                Nalazoo is a Korean company that provides platform services in the field of companion animal health care.  We are developing and selling nutritional supplements together with veterinarians as well. Our vision is to make pets and their owners more closely connected. We will not only manage the health of companion animals, but also make healthcare easier through our own platform service. <br/> Thank you. <br/><br/> CEO <br/> Hyun, Jinhwan
            </p>
        </div>
        
        <div class="about_bg_wrap">
            <img class="about_icon_01" src="https://nalazoocare.com/klinix/img/about/medi_01.svg" alt="">
            <img class="about_icon_02" src="https://nalazoocare.com/klinix/img/about/medi_02.svg" alt="">
            <img class="about_icon_03" src="https://nalazoocare.com/klinix/img/about/medi_03.svg" alt="">
            <img class="about_icon_04" src="https://nalazoocare.com/klinix/img/about/medi_04.svg" alt="">
            <img class="about_icon_05" src="https://nalazoocare.com/klinix/img/about/medi_05.svg" alt="">
            <img class="about_icon_06" src="https://nalazoocare.com/klinix/img/about/medi_06.svg" alt="">
            <img class="about_icon_07" src="https://nalazoocare.com/klinix/img/about/medi_07.svg" alt="">
            <img class="about_icon_08" src="https://nalazoocare.com/klinix/img/about/medi_08.svg" alt="">
        </div>
    </div>
</div>

<style>
    #lnb .h_wrap nav a:first-child{ border-bottom: 2px solid #000; }
</style>

<script>
// 범위 랜덤 함수(소수점 2자리까지)
function random(min, max) {
  // `.toFixed()`를 통해 반환된 문자 데이터를,
  // `parseFloat()`을 통해 소수점을 가지는 숫자 데이터로 변환
  return parseFloat((Math.random() * (max - min) + min).toFixed(2))
}

function floatingObject(selector,delay,size){
  // gsap.to(요소, 시간, 옵션)
  gsap.to(selector, random(1.5,2.5), {
    y: size,
    repeat: -1, // -1 무한반복
    yoyo: true, // 애니메이션 되돌아오기(설정안할 시 끈킴)
    ease: Power1.easeInOut, // 타이밍함수
    delay: random(0,delay) // 지연시간
  })
}
floatingObject('.about_icon_01',1,15)
floatingObject('.about_icon_02',.5,15)
floatingObject('.about_icon_03',1.5,20)
floatingObject('.about_icon_04',1,15)
floatingObject('.about_icon_05',.5,15)
floatingObject('.about_icon_06',1.5,20)
floatingObject('.about_icon_07',1,15)
floatingObject('.about_icon_08',.5,15)
</script>