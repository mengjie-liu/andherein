let day = 0;
switch (new Date().getDate()) {
  case 13:
    day = document.getElementsByTagName("li")[0];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 14:
    day = document.getElementsByTagName("li")[1];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 15:
    day = document.getElementsByTagName("li")[2];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 16:
    day = document.getElementsByTagName("li")[3];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 17:
    day = document.getElementsByTagName("li")[4];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 18:
    day = document.getElementsByTagName("li")[5];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 19:
    day = document.getElementsByTagName("li")[6];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 20:
    day = document.getElementsByTagName("li")[7];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 21:
    day = document.getElementsByTagName("li")[8];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 22:
    day = document.getElementsByTagName("li")[9];
    day.firstElementChild.classList.remove("hidden");
    break;
  case 23:
    day = document.getElementsByTagName("li")[10];
    day.firstElementChild.classList.remove("hidden");
}

let about = document.querySelector(".about");
let aboutContainer = document.querySelector(".aboutContainer");
about.addEventListener("click", function () {
  aboutContainer.style.display = "block";
  if (aboutContainer) {
    aboutContainer.addEventListener("click", function () {
      this.style.display = "none";
    });
  }
});

let audio = document.querySelectorAll(".audio");
let video = document.querySelectorAll(".video");
let image = document.querySelectorAll(".image");
let ambient = document.querySelectorAll(".ambient");
audio.forEach(function (item) {
  item.addEventListener("click", function () {
    let src = this.querySelector("audio").getAttribute("src");
    let detailedDes = this.querySelector(".detailedDes").innerHTML;
    if (src) {
      document.body.insertAdjacentHTML(
        "beforeend",
        `
      <div class="contentBG">
        <div class="contentDetail">
        <audio autoplay controls>
            <source src=${src} type="audio/mpeg">
        </audio>
        <p class="bigDes">
        <span class="audioMark">"</span
        ><!-- 
        --><span class="text">${detailedDes}</span
        ><!-- 
        --><span class="audioMark">"</span>
        </p>
        </div>
    </div>
    `
      );
      let content = document.querySelector(".contentBG");
      if (content) {
        content.addEventListener("click", function () {
          this.remove();
        });
      }
    }
  });
});

video.forEach(function (item) {
  item.addEventListener("click", function () {
    // console.log("clicked");
    let src =
      this.querySelector(".vdContainer").children[0].children[0].getAttribute(
        "src"
      );
    console.log(src);
    let detailedDes = this.querySelector(".detailedDes").innerHTML;
    if (src) {
      document.body.insertAdjacentHTML(
        "beforeend",
        `
            <div class="contentBG">
              <div class="contentDetail">
              <div class="bigvdContainer">
              <video class="bigVideo" muted autoplay loop>
                <source src=${src} type="video/mp4" />
                <!-- Your browser does not support the video tag. -->
              </video>
            </div>
          <p class="bigDes">
              ${detailedDes}
              </p>
              </div>
          </div>
          `
      );
      let content = document.querySelector(".contentBG");
      if (content) {
        content.addEventListener("click", function () {
          this.remove();
        });
      }
    }
  });
});

image.forEach(function (item) {
  item.addEventListener("click", function () {
    let src =
      this.querySelector(".imgContainer").children[0].getAttribute("src");
    let detailedDes = this.querySelector(".detailedDes").innerHTML;
    if (src) {
      document.body.insertAdjacentHTML(
        "beforeend",
        `
          <div class="contentBG">
            <div class="contentDetail">
            <div class="bigimgContainer">
                  <img class="bigImg" src=${src} alt="" />
            </div>
            <p class="bigDes">
            ${detailedDes}
            </p>
            </div>
        </div>
        `
      );
      let content = document.querySelector(".contentBG");
      if (content) {
        content.addEventListener("click", function () {
          this.remove();
        });
      }
    }
  });
});

ambient.forEach(function (item) {
  item.addEventListener("click", function () {
    let src = this.querySelector("audio").getAttribute("src");
    let detailedDes = this.querySelector(".detailedDes").innerHTML;
    if (src) {
      document.body.insertAdjacentHTML(
        "beforeend",
        `
        <div class="contentBG">
          <div class="contentDetail">
          <audio autoplay controls>
              <source src=${src} type="audio/mpeg">
          </audio>
          <p class="bigDes">
          <span class="ambientMark">[</span
            ><!-- 
            --><span class="text">${detailedDes}</span
            ><!-- 
            --><span class="ambientMark">]</span>
          </p>
          </div>
      </div>
      `
      );
      let content = document.querySelector(".contentBG");
      if (content) {
        content.addEventListener("click", function () {
          this.remove();
        });
      }
    }
  });
});

let tags = document.querySelectorAll(".tag");
tags.forEach(function (tag) {
  // let classNameArray = [];
  // classNameArray.push()
  let classname = tag.className.toString();
  let index = classname.slice(11);
  //   console.log(index);
});
