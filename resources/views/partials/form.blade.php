@csrf
<div class="form-group col-md-12">
    <label>Id</label>
    <input value="{{ $investor->id ?? '' }}" type="text" readonly="readonly" class="form-control" />
</div>
<div class="form-group col-md-12">
    <label for="name">Nome</label>
    <input value="{{ $investor->name ?? '' }}" type="text" class="form-control" id="name" name="name"
        placeholder="Alex Tromboghozy" />
</div>
<div class="form-group col-md-4">
    <label for="capital">Capital</label>
    <input value="{{ $investor->capital ?? '' }}" type="number" step="0.01" class="form-control" id="capital"
        name="capital" placeholder="R$ 1000,00" onchange="verifyNumber();" onclick="verifyNumber();"
        onfocus="verifyNumber();" />
    <label id="what" style="padding-left: 1%; color:red;"></label>
</div>

