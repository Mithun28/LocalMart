function addproduct() {
    const container = document.getElementById('inputFields');

    const table = document.createElement('table');
    table.className = 'input-box';

    table.innerHTML = `
      <tr>
          <td colspan="2">
          <input type="text" class="products" placeholder="Enter Product Name" name="product_name[]" required />
          </td>
          <td rowspan="3">
            <div class="profile-picture">
              <h1 class="upload-icon">
                <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
              </h1>
              <input
                class="file-uploader"
                type="file"
                onchange="upload()"
                accept="image/*"
                name="product_picture[]"
              />
            </div>
          </td>
          </tr>
        <tr>
          <td colspan="2">
          <input type="text" class="products" placeholder="Enter Product Description" name="product_description[]" required />
          </td>
        </tr>
        <tr>
          <td>
          <input type="number" class="sales" placeholder="Enter Price" name="product_price[]" required /></td>
          <td>
          <input type="text" class="sales" placeholder="Enter Product Type" name="product_type[]" required /></td>
        </tr>
    `;

    container.appendChild(table);
  }