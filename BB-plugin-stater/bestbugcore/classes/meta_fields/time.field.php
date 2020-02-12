<tr> 
    <th scope="row">
        <label for="<?php echo esc_html( $option['param_name']); ?>"><?php echo esc_html( $option['heading']); ?></label>
    </th>
    <td>
        <p>
        <input type="time" class="" id="<?php echo esc_html( $option['param_name']); ?>" name="<?php echo esc_html( $option['param_name']); ?>" value="<?php echo esc_html( $option['value']); ?>">
        </p>
        <p class="description"><?php echo ( $option['description']); ?></p>
    </td>
</tr>
    
