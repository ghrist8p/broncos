<div class="row">
    <form action="/roster/setSession" method="post">
        <select name="layout">
            <option value="">Select a layout</option>
            <option value="gallery">Gallery</option>
            <option value="table">Table</option>
        </select>
        <select name="order">
            <option value="">Select an order</option>
            <option value="name">Name</option>
            <option value="number">Jersey Number</option>
            <option value="number">Position</option>
        </select>
        <input type="submit" value="Go!" />
    </form>
</div>
<div class="row">
    {players}
    <div class="span4 text-center"><a href="/player/{id}"><img src="/data/{mug}" title="{who}"/></a><br />
        <p>#{num}: {who}</p></div>
    {/players}
</div>