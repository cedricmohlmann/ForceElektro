<style>
    .donations-table {
      width: 100%;
    }
    .donations-table table {
      border-collapse: collapse;
    }
    .donations-table td {
      padding: 10px;
      border: 2px solid lightgray;
      min-width: 50px;
      height: 100px;
      text-align: center;
    }
    .donations-table-levels td {
        border-width: 2px 2px 2px 0px;
    }
    .donations-table {
      display: flex;
    }
    .donations-table-perks {
      width: 50px;
    }
    .donations-table-perks .price {
      padding: 0px 10px;
      
    }
    .donations-table-levels-right {
      flex-grow: 1;
      position: relative;
      -webkit-box-shadow: inset -11px 0px 6px -4px rgba(0,0,0,0.13); 
box-shadow: inset -11px 0px 6px -4px rgba(0,0,0,0.13);
    }
    .donations-table-levels-wrapper {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow-x: scroll;
    }
    .hide-scrollbar::-webkit-scrollbar {
      display: none;
    }
    
    .hide-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    
    .donations-table-levels {
      width: 100%;
    }
    .donations-table-levels .level {
        font-weight: bold;
    }
    .donations-table-levels .price {
        font-weight: bold;
    }
    .check {
        font-size: 50px;
        color: lightgreen;
    }
    .check::after {
        content: '\2713';
    }
</style>

<div class="donations-table">
    <table class="donations-table-perks">
      <tr><td></td></tr>
      <tr><td>Daily World's updates</tr>
      <tr><td>Tournament updates in pre-season</td></tr>
      <tr><td>Hand-written FE thank you card</td></tr>
      <tr><td>Belgian Waffles</td></tr>
      <tr><td>Signed disc</td></tr>
      <tr><td>Jersey with your (company) name</td></tr>
    </table>
    <div class="donations-table-levels-right">
        <div class="donations-table-levels-wrapper hide-scrollbar">
            <table class="donations-table-levels">
              <tr>
                <td>
                    <p class="level">Bronze</p>
                    <p class="price">€20</p>
                </td>
                <td>
                    <p class="level">Silver</p>
                    <p class="price">€50</p>
                </td>
                <td>
                    <p class="level">Gold</p>
                    <p class="price">€100</p>
                </td>
                <td>
                    <p class="level">Platinum</p>
                    <p class="price">€1000</p>
                </td>
              </tr>
              <tr>
                <td class="check"></td>
                <td class="check"></td>
                <td class="check"></td>
                <td class="check"></td>
              </tr>
              <tr>
                <td class="check"></td>
                <td class="check"></td>
                <td class="check"></td>
                <td class="check"></td>
              </tr>
              <tr>
                <td class="check"></td>
                <td class="check"></td>
                <td class="check"></td>
                <td class="check"></td>
              </tr>
              <tr>
                <td class=""></td>
                <td class="check"></td>
                <td class="check"></td>
                <td class="check"></td>
              </tr>
              <tr>
                <td class=""></td>
                <td class=""></td>
                <td class="check"></td>
                <td class="check"></td>
              </tr>
              <tr>
                <td class=""></td>
                <td class=""></td>
                <td class=""></td>
                <td class="check"></td>
              </tr>
            </table>
        </div>
    
    </div>
</div>
