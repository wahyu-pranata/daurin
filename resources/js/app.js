import "flowbite";
import "./bootstrap";

import { Modal } from "flowbite";
import Swal from "sweetalert2";
import Alpine from "alpinejs";

window.Alpine = Alpine;
window.Swal = Swal;
// window.Modal = Modal;
// initFlowbite();

const addItemDetail = document.getElementById("add-item-detail-modal");
if (addItemDetail) {
  const addItemDetailModal = new Modal(addItemDetail);
  window.addItemDetailModal = addItemDetailModal;
}
const cart = document.getElementById("cart-modal");
if (cart) {
  const cartModal = new Modal(cart);
  window.cartModal = cartModal;
}

Alpine.start();
