import myfont from '/wuic/public/fonts/ChalkDust.ttf';
injectGlobal`
  @font-face {
    font-family: 'PTC55F';
    src: url(${myFont}) format('truetype');
    font-weight: normal;
    font-style: normal;
  }
`;