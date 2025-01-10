// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", () => {
  //定義
  const drawerIcon = document.querySelector(".p-drawer__icon");
  const drawer = document.querySelector(".p-drawer");
  const drawerNavItem = document.querySelectorAll(
    '.p-drawer__body a[href^="#"]'
  );
  const headerSpace = document.querySelector(".p-header__space");
  const headerHeight = document.querySelector(".p-header").offsetHeight;
  const header = document.querySelector(".p-header");
  const breakpoint = 768;
  let isMenuOpen = false;
  let isMenuOpenAtBreakpoint = false;

  //メニューを開くアニメーション
  const openMenu = () => {
    if (!drawer.classList.contains("js-show")) {
      drawer.classList.add("js-show");
      drawerIcon.classList.add("js-show");
      header.classList.add("js-fixed");
      headerSpace.classList.add("js-drawer-open");

      // 背景のスクロールを無効にする
      document.body.style.overflow = "hidden"; // bodyのスクロールを無効にする
      document.documentElement.style.overflow = "hidden"; // htmlのスクロールも無効にする

      // フォーカスをメニューの最初の要素に移動
      if (drawerNavItem.length > 0) {
        drawerNavItem[0].focus();
      }

      // メニュー内のフォーカス可能な要素を制御
      document.querySelectorAll("a, button").forEach((el) => {
        if (!drawer.contains(el) && el !== drawerIcon) {
          el.setAttribute("tabindex", "-1"); // メニュー外の要素をフォーカスできないようにする
        }
      });
    }
  };

  //メニューを閉じるアニメーション
  const closeMenu = () => {
    if (drawer.classList.contains("js-show")) {
      drawer.classList.remove("js-show");
      drawerIcon.classList.remove("js-show");
      header.classList.remove("js-fixed");
      headerSpace.classList.remove("js-drawer-open");
      isMenuOpen = false;

      // 背景のスクロールを元に戻す
      document.body.style.overflow = ""; // bodyのスクロールを元に戻す
      document.documentElement.style.overflow = ""; // htmlのスクロールを元に戻す

      // メニューが閉じたら、ドロワーアイコンにフォーカスを戻す
      drawerIcon.focus();

      // メニュー外の要素のフォーカスを戻す
      document.querySelectorAll("a, button").forEach((el) => {
        el.setAttribute("tabindex", "0"); // メニュー外の要素のフォーカスを再度有効にする
      });
    }
  };

  //メニューの開閉動作
  const toggleMenu = () => {
    if (isMenuOpen) {
      closeMenu();
      drawerIcon.setAttribute("aria-expanded", "false");
    } else {
      openMenu();
      drawerIcon.setAttribute("aria-expanded", "true");
    }
  };

  //リサイズ処理
  const handleResize = () => {
    const bp = breakpoint;
    const windowWidth = window.innerWidth;
    if (windowWidth > bp && isMenuOpenAtBreakpoint) {
      closeMenu();
    } else if (windowWidth <= bp && drawer.classList.contains("js-show")) {
      isMenuOpenAtBreakpoint = true;
    }
  };

  //メニュー外クリック処理
  const clickOuter = (event) => {
    if (
      drawer.classList.contains("js-show") &&
      !drawer.contains(event.target) &&
      isMenuOpen
    ) {
      closeMenu();
    } else if (
      drawer.classList.contains("js-show") &&
      !drawer.contains(event.target)
    ) {
      isMenuOpen = true;
    }
  };

  //該当箇所までスクロール
  const linkScroll = (target) => {
    if (target) {
      const targetPosition =
        target.getBoundingClientRect().top + window.scrollY;
      const offsetPosition = targetPosition - headerHeight;
      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
      });
    }
  };

  //ヘッダーアイコン クリック時
  drawerIcon.addEventListener("click", toggleMenu);
  //画面幅リサイズ時
  window.addEventListener("resize", handleResize);
  //メニュー外クリック時
  document.addEventListener("click", clickOuter);
  //ページ内リンクナビメニュー クリック時
  drawerNavItem.forEach((item) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      closeMenu();
      const targetItem = document.querySelector(item.getAttribute("href"));
      linkScroll(targetItem);
    });
  });
});

// ページ内リンクのスムーススクロール
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('a[href^="#"]');
  links.forEach((item) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      const targetId = item.getAttribute("href");
      const target = document.querySelector(targetId);
      if (target) {
        const elementPosition = target.getBoundingClientRect().top;
        window.scrollTo({
          top: elementPosition,
          behavior: "smooth",
        });
      }
    });
  });
});

// swiper
const swiperMV = new Swiper(".js-mv-swiper", {
  // Optional parameters
  loop: true,
  slidesPerView:
    "auto" /* autoにすることでレスポンシブに応じてサイズを変えずに枚数を可変 */,
  // spaceBetween: 10,
  speed: 2000,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});

// ページが読み込まれたときにスライドを複製する
window.addEventListener("load", function () {
  const swiperWrapper = document.querySelector(".swiper-wrapper");

  // swiper-wrapperが存在するか確認
  if (!swiperWrapper) return;

  // 現在のすべてのスライドを取得
  const slides = document.querySelectorAll(".swiper-slide");

  // swiper-slideが存在するか確認
  if (slides.length === 0) return;

  // 複製の際に必要な数を計算
  const slideCount = slides.length;

  // 複製処理
  for (let i = 0; i < slideCount; i++) {
    const clonedSlide = slides[i].cloneNode(true); // スライドを複製
    swiperWrapper.appendChild(clonedSlide); // swiper-wrapperに追加
  }

  // Swiperを更新して新しいスライドを反映
  swiperMV.update();
});

document.addEventListener("DOMContentLoaded", function () {
  let toTopButton = document.querySelector(".c-to-top");

  // To Topボタンがクリックされたときにページの先頭にスクロールする
  toTopButton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const IS_OPENED_CLASS = "is-opened";

  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      // デフォルトの挙動を無効化
      event.preventDefault();

      // is-openedクラスの有無で判定（detailsのopen属性の判定だと、アニメーション完了を待つ必要がありタイミング的に不安定になるため）
      if (element.classList.contains(IS_OPENED_CLASS)) {
        // アコーディオンを閉じるときの処理
        // アイコン操作用クラスを切り替える(クラスを取り除く)
        element.classList.toggle(IS_OPENED_CLASS);

        // アニメーション実行
        closingAnim(content, element).restart();
      } else {
        // アコーディオンを開くときの処理
        // アイコン操作用クラスを切り替える(クラスを付与)
        element.classList.toggle(IS_OPENED_CLASS);
        // open属性を付与
        element.setAttribute("open", "true");
        // アニメーション実行
        openingAnim(content).restart();
      }
    });
  });
};
/**
 * アコーディオンを閉じる時のアニメーション
 */
const closingAnim = (content, element) =>
  gsap.to(content, {
    height: 0,
    opacity: 0,
    duration: 0.4,
    ease: "power3.out",
    overwrite: true,
    onComplete: () => {
      // アニメーションの完了後にopen属性を取り除く
      element.removeAttribute("open");
    },
  });

/**
 * アコーディオンを開く時のアニメーション
 */
const openingAnim = (content) =>
  gsap.fromTo(
    content,
    {
      height: 0,
      opacity: 0,
    },
    {
      height: "auto",
      opacity: 1,
      duration: 0.4,
      ease: "power3.out",
      overwrite: true,
    }
  );

jQuery(function ($) {
  const Target = $(".js-empty");
  $(Target).on("change", function () {
    if ($(Target).val() !== "") {
      $(this).removeClass("js-empty");
    } else {
      $(this).addClass("js-empty");
    }
  });
});
