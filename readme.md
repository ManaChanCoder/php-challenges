# PHP Challenge: Order Receipt & Tax Computation

Isang simpleng PHP script na nagko-compute ng subtotal, discount, tax (VAT), at final total mula sa isang listahan ng mga biniling item gamit ang associative array at custom function.

---

## 📌 Features / Requirements

- **Constants**: `TAX_RATE` (0.12 o 12%).
- **Associative Array**: Listahan ng items at kanya-kanyang presyo.
- **Custom Function (`processOrders`)**:
  - Iteration gamit ang `foreach` loop para kunin ang subtotal at ma-print ang bawat item.
  - Conditional discount: **10% discount** kapag ang subtotal ay lumampas sa ₱10,000.
  - Computation ng discount amount, discounted subtotal, tax amount, at total price.

---
