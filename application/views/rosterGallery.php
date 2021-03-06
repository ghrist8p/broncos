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
            <option value="num">Jersey Number</option>
            <option value="pos">Position</option>
        </select>
        <input type="submit" value="Go!" />
    </form>
</div>
<div class="row">
    {players}
    <div class="span4 text-center"><a href="/player/{edit}{id}"><img src="/data/{mug}" title="{who}"/></a><br />
        <p>#{num}: {name}</p></div>
    {/players}
</div>
<div class="row">
    {pagination}
</div>
<div class="row" style="display: {displayAddBtn};" >
    <a href="/player/new" class="btn btn-info" role="button">New Player</a>
</div>