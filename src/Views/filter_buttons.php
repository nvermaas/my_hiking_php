    <div class="card">
     <div class="card-body">
       <table>
         <tr>
           <td>
           <!--
                <form action="" method="post">
                    <input type="hidden" name="country" value="France">
                    <button class="btn btn-primary btn-sm" type="submit" name="filter"><i class="fas fa-layer-group"></i> France</button>
                </form>
           -->
               <a href="{% url 'hiking:hike-set-filter' 'all' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> ALL</a>
               <a href="{% url 'hiking:hike-set-filter' 'austria' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Austria</a>
               <a href="{% url 'hiking:hike-set-filter' 'canada' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Canada</a>
               <a href="{% url 'hiking:hike-set-filter' 'finland' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Finland</a>
               <a href="{% url 'hiking:hike-set-filter' 'france' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> France</a>
               <a href="{% url 'hiking:hike-set-filter' 'italy' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Italy</a>
               <a href="{% url 'hiking:hike-set-filter' 'new zealand' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> New Zealand</a>
               <a href="{% url 'hiking:hike-set-filter' 'norway' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Norway</a>
               <a href="{% url 'hiking:hike-set-filter' 'peru' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Peru</a>
               <a href="{% url 'hiking:hike-set-filter' 'spain' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Spain</a>
               <a href="{% url 'hiking:hike-set-filter' 'sweden' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Sweden</a>
               <a href="{% url 'hiking:hike-set-filter' 'turkey' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> Turkey</a>
               <a href="{% url 'hiking:hike-set-filter' 'uk' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> UK</a>
               <a href="{% url 'hiking:hike-set-filter' 'usa' %}" class="btn btn-primary btn-sm" role="button"><i class="fas fa-layer-group"></i> USA</a>
           </td>
         </tr>

       </table>
     </div>
    </div>
