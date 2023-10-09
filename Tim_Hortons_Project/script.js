document.addEventListener("DOMContentLoaded", function () {
  const orderForm = {
    quantityBox: document.getElementById("quantity"),
    milkBox: document.getElementById("milk"),
    creamBox: document.getElementById("cream"),
    sugarBox: document.getElementById("sugar"),
    Btns: document.querySelectorAll(".buttons"),
  };
  const updateContent = (milkValue, creamValue, sugarValue) => {
    orderForm.milkBox.value = milkValue;
    orderForm.creamBox.value = creamValue;
    orderForm.sugarBox.value = sugarValue;
  };
  const buttonHandler = (getClickedBtn) => {
    if (Number(orderForm.quantityBox.value) < 1) {
      orderForm.quantityBox.value = 1;
      if (getClickedBtn === "black") {
        updateContent(0, 0, 0);
      } else if (getClickedBtn === "regular") {
        updateContent(1, 1, 1);
      } else if (getClickedBtn === "double-double") {
        updateContent(2, 2, 2);
      } else if (getClickedBtn === "triple-triple") {
        updateContent(3, 3, 3);
      }
    }
  };
  orderForm.Btns.forEach((options) => {
    options.addEventListener("click", function () {
      const btnClicked = this.value.toLowerCase();
      buttonHandler(btnClicked);
    });
  });
});
