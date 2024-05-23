document.addEventListener("DOMContentLoaded", function () {
  var chatWidgetIcon = document.getElementById("chat-widget-icon");
  var chatWidgetModal = document.getElementById("chat-widget-modal");

  chatWidgetIcon.addEventListener("click", function () {
    if (
      chatWidgetModal.style.display === "none" ||
      chatWidgetModal.style.display === ""
    ) {
      chatWidgetModal.style.display = "block";
    } else {
      chatWidgetModal.style.display = "none";
    }
  });
});
