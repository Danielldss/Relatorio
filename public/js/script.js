function addProductLine() {
    // Clone the first product line and append it to the container
    const productLine = document.querySelector('.product-line');
    const clonedProductLine = productLine.cloneNode(true);
    document.querySelector('.clone').appendChild(clonedProductLine);
}
