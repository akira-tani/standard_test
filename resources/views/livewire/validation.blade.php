<form wire:submit.prevent="register" action="/confirm" method="post">
    <table>
        @csrf
        <tr>
            <th>お名前<span class="contact__table__required">※</span></th>
            <td class="contact__table__name">
                <div class="contact__table__lastname">
                    <input wire:model="lastName" type="text" name="lastName">
                    <p>例）山田</p>
                    @error('lastName')<span>{{ $message }}</span> @enderror
                </div>
                <div class="contact__table__firstname">
                    <input wire:model="firstName" type="text" name="firstName">
                    <p>例）太郎</p>
                    @error('firstName')<span>{{ $message }}</span> @enderror
                </div>
            </td>
        </tr>
        <tr>
            <th>性別<span class="contact__table__required">※</span></th>
            <td>
                <input class="contact__table__gender__man" type="radio" name="gender" value="1" checked>男性
                <input class="contact__table__gender__woman" type="radio" name="gender" value="2">女性
                @error('gender')<span>{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <th>メールアドレス<span class="contact__table__required">※</span></th>
            <td>
                <input wire:model="email" type="email" name="email">
                <p>例）test@example.com</p>
                @error('email')<span>{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <th>郵便番号<span class="contact__table__required">※</span></th>
            <td>
                <input wire:model="postcode" type="text" name="postcode" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                <p>例）123-4567</p>
                @error('postcode')<span>{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <th>住所<span class="contact__table__required">※</span></th>
            <td>
                <input wire:model="address" type="text" name="address">
                <p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
                @error('address')<span>{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <th>建物名</th>
            <td>
                <input wire:model="building_name" type="text" name="building_name">
                <p>例）千駄ヶ谷マンション101</p>
            </td>
        </tr>
        <tr>
            <th class="contact__table__header__opinion">ご意見<span class="contact__table__required">※</span></th>
            <td>
                <textarea wire:model="opinion" name="opinion" cols="30" rows="6"></textarea>
                @error('opinion')<span>{{ $message }}</span> @enderror
            </td>
        </tr>
    </table>
    <div class="contact__submit">
        <button>確認</button>
    </div>
</form>