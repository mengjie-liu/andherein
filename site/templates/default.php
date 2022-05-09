<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/style.css" />
    <title>and here in</title>
  </head>
  <body>
    <div class="bg"></div>
    <div class="container">
      <div class="about">about</div>
      <div class="aboutContainer">
          <div class="aboutText">
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</br>
                &emsp;Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
                at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla.</br>
                &emsp;Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy
                nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum
                dolor sit amet, consectetuer adipiscing elit.</br>
                &emsp;Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                esse molestie consequat.
            </p>
            <br>
            <p>2022 Graduating Class:
            </p>
            <p>&emsp;Alvin Ashiatey</p>
            <p>&emsp;Jessica Flemming</p>
            <p>&emsp;Han Gao</p>
            <p>&emsp;Yuan Gao</p>
            <p>&emsp;Miguel Gaydosh</p>
            <p>&emsp;Rok Hudobivnik</p>
            <p>&emsp;Kathryn-kay Johnson</p>
            <p>&emsp;Mengjie Liu</p>
            <p>&emsp;Ana Lobo</p>
            <p>&emsp;Kang Ma</p>
            <p>&emsp;Churong Mao</p>
            <p>&emsp;Hannah Tjaden</p>
            <p>&emsp;Betty Wang</p>
            <p>&emsp;Mike Tully</p>
            <p>&emsp;Immanuel Yang</p>
            <br>
            <p>&emsp;Exhibition Design: Alvin Ashiatey, Jessica Flemming, Miguel Gaydosh, Rok Hudobivnik, Kathryn-kay Johnson, Mengjie Liu, Mike Tully, Immanuel Yang.</p>
            <p>&emsp;Special thanks to Yeju Choi, Sarah Stevens-Morling, and Edgar Serrano, for all of your help and support in making this exhibition possible.
            </p>
          </div>
      </div>
      <div class="navigation">
        <div class="showTitle">
        <p style="font-family: Arial Narrow;">May 2022</p>
          <br />
        <p>
        Yale School of Art<br />
        Graphic Design<br />
        Thesis Show
        </p>
        </div>
        <div class="descrips">
          <div class="tag tagText1">at the entrance,</div>
          <div class="tag tagText2">around the corner,</div>
          <div class="tag tagText3">downstairs,</div>
          <div class="tag tagText4">up there,</div>
          <div class="tag tagText5">by the door,</div>
          <div class="tag tagText6">somewhere,</div>
          <div class="tag tagText7">here,</div>
          <div class="tag tagText8">at the entrance,</div>
          <div class="tag tagText9">around the corner,</div>
          <div class="tag tagText10">downstairs,</div>
          <div class="tag tagText11">up there,</div>
          <div class="tag tagText12">by the door,</div>
          <div class="tag tagText13">somewhere,</div>
          <div class="tag tagText14">here,</div>
          <div class="tag tagText15">at the entrance,</div>
          <div class="tag tagText16">around the corner,</div>
          <div class="tag tagText17">downstairs,</div>
          <div class="tag tagText18">up there,</div>
          <div class="tag tagText19">by the door,</div>
          <div class="tag tagText20">somewhere,</div>
          <div class="tag tagText21">here,</div>
          <div class="tag tagText22">at the entrance,</div>
          <div class="tag tagText23">around the corner,</div>
          <div class="tag tagText24">downstairs,</div>
          <div class="tag tagText25">up there,</div>
          <div class="tag tagText26">by the door,</div>
          <div class="tag tagText27">somewhere,</div>
          <div class="tag tagText28">here,</div>
          <div class="tag tagText29">at the entrance,</div>

        </div>
      </div>
      <div class="navBg"></div>
      <div class="calendarWrap">
        <ul class="calendarContainer">
          <div class="calBg"></div>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Fri 13</div>
              <div class="title">
                <span class="bracket notShown">(</span
                ><!-- 
                --><span class="titleText">and here in</span
                ><!-- 
                --><span class="bracketend notShown">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
              <?php if($page->files()->filterBy('date','Fri 13')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Fri 13') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->resize(1000)->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->resize(1000)->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                  <div class="audio tagText1 sudo">
                    <audio src="" muted></audio>
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">someone is talking about something</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText28 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText6 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText15 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">field recording from somewhere</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
              <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Sat 14</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Sat 14')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Sat 14') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText5 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText11 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText20 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText2 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                  <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Sun 15</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Sun 15')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Sun 15') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText15 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText23 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText3 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText28 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                <?php endif ?>
            </div>
        </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Mon 16</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Mon 16')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Mon 16') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText27 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText7 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText26 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText19 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                  <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Tue 17</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Tue 17')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Tue 17') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText13 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText26 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText1 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText15 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                  <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Wed 18</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Wed 18')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Wed 18') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText1 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText16 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText25 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText9 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Thu 19</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Thu 19')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Thu 19') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText4 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText11 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText28 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText17 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Fri 20</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Fri 20')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Fri 20') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText23 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText6 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText13 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText20 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Sat 21</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Sat 21')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Sat 21') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText29 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText12 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText3 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText18 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                  <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Sun 22</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Sun 22')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Sun 22') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText25 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText6 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText18 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText22 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                  <?php endif ?>
            </div>
          </li>
          <li class="row">
            <div class="today hidden">
              <span class="left">*</span>
              <span class="todayText">today</span>
              <span class="right">*</span>
            </div>
            <div class="dateTitle">
              <div class="date">Mon 23</div>
              <div class="title">
                <span class="bracket">(</span
                ><!-- 
                --><span class="titleText hidden"
                  >the title can go as long as possible, as long as it is in
                  three lines</span
                ><!-- 
                --><span class="bracketend">)</span
                ><!-- 
                --><span class="comma">,</span>
              </div>
            </div>
            <div class="content">
            <?php if($page->files()->filterBy('date','Mon 23')->isNotEmpty()): ?>
                <?php foreach ($page->files()->filterBy('date','Mon 23') as $dailyfile): ?>
                  <?php if( $dailyfile->filetype() == "audio"): ?>
                      <div class="audio <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="audioMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="audioMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "ambient"): ?>
                      <div class="ambient <?= $dailyfile->tag() ?>">
                      <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                        <audio src="<?= $dailyfile->url() ?>" muted></audio>
                        <span class="ambientMark">"</span
                        ><!-- 
                        --><span class="text"><?= $dailyfile->shortdescription() ?></span
                        ><!-- 
                        --><span class="ambientMark">"</span>
                      </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "image"): ?>
                    <div class="image <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="imgContainer">
                      <img src="<?= $dailyfile->url() ?>" alt="" />
                    </div>
                  </div>
                  <?php endif ?>
                  <?php if($dailyfile->filetype() == "video"): ?>
                    <div class="video <?= $dailyfile->tag() ?>">
                    <div class="shortDes" style="display:none"><?= $dailyfile->shortdescription() ?></div>
                    <div class="detailedDes" style="display:none"><?= $dailyfile->detaileddescription() ?></div>
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="<?= $dailyfile->url() ?>" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
                <?php else: ?>
                <div class="audio tagText23 sudo">
                    <span class="audioMark">"</span
                    ><!-- 
                    --><span class="text hidden">some text describing the audio sound</span
                    ><!-- 
                    --><span class="audioMark">"</span>
                  </div>
                  <div class="video tagText28 sudo">
                    <div class="vdContainer">
                      <video muted autoplay loop>
                        <source src="" type="video/mp4" />
                        <!-- Your browser does not support the video tag. -->
                      </video>
                    </div>
                  </div>
                  <div class="image tagText21 sudo">
                    <div class="imgContainer">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <div class="ambient tagText10 sudo">
                    <span class="ambientMark">[</span
                    ><!-- 
                    --><span class="text hidden">some text of ambient sound</span
                    ><!-- 
                    --><span class="ambientMark">]</span>
                  </div>
                <?php endif ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <script src="./assets/script.js"></script>
  </body>
</html>
